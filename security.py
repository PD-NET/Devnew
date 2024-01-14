import os
import time
from zapv2 import ZAPv2

# The URL of the application to be tested
target = os.getenv('TARGET_URL', 'http://pd-net-prod-main-1518350640.us-east-1.elb.amazonaws.com/')
# Change to match the GitHub secret name set for the API key
api_key_secret_name = '5h42cgakvq6ovrsm7rd6dtm2rj'
api_key = os.getenv(api_key_secret_name)

# Use proxies if needed
proxies = {'http': 'http://localhost:8081/'}

# Initialize ZAP with API key and proxies
zap = ZAPv2(apikey=api_key, proxies=proxies)

print('Spidering target {}'.format(target))
scan_id = zap.spider.scan(target)

while int(zap.spider.status(scan_id)) < 100:
    # Poll the status until it completes
    print('Spider progress %: {}'.format(zap.spider.status(scan_id)))
    time.sleep(1)

print('Spider has completed!')
# Prints the URLs the spider has crawled
print('\n'.join(map(str, zap.spider.results(scan_id))))

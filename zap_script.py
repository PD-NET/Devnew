import os
import time
from zapv2 import ZAPv2

# ZAP API URL
zap_api_url = os.getenv('ZAP_API_URL', 'http://localhost:8080')  # Update with your ZAP API URL

# ZAP API Key
api_key = os.getenv('ZAP_API_KEY', '5h42cgakvq6ovrsm7rd6dtm2rj')  # Update with your ZAP API key

# Proxy configuration
proxy_url = os.getenv('HTTP_PROXY', 'http://localhost:8081/')  # Update with your proxy URL
proxies = {'http': proxy_url}

# Initialize ZAP
zap = ZAPv2(apikey=api_key, proxies=proxies)

# Your ZAP-related actions here
# For example, you can run a spider scan or an active scan

# Example: Spider the target URL
target_url = 'http://pd-net-prod-main-1518350640.us-east-1.elb.amazonaws.com/'
scan_id = zap.spider.scan(target_url)

print(f'Spidering target {target_url}...')
while int(zap.spider.status(scan_id)) < 100:
    print(f'Spider progress %: {zap.spider.status(scan_id)}')
    time.sleep(1)

print('Spider has completed!')
print('\n'.join(map(str, zap.spider.results(scan_id))))

import time
from zapv2 import ZAPv2

# The URL of the application to be tested
target = 'http://pd-net-prod-main-1518350640.us-east-1.elb.amazonaws.com/'
# Change to match the API key set in ZAP, or use None if the API key is disabled
apiKey = '5h42cgakvq6ovrsm7rd6dtm2rj'

# Use the line below if ZAP is not listening on port 8080, for example, if listening on port 8090
zap = ZAPv2(apikey=apiKey, proxies={'http': 'http://localhost:8081/'})

print('Spidering target {}'.format(target))
# The scan returns a scan id to support concurrent scanning
scanID = zap.spider.scan(target)
while int(zap.spider.status(scanID)) < 100:
    # Poll the status until it completes
    print('Spider progress %: {}'.format(zap.spider.status(scanID)))
    time.sleep(1)

print('Spider has completed!')
# Prints the URLs the spider has crawled
print('\n'.join(map(str, zap.spider.results(scanID))))

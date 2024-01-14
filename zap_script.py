import os
import time
import requests
from zapv2 import ZAPv2

# Proxy configuration
proxy_url = os.getenv('HTTP_PROXY', 'http://localhost:8081/')  # Update with your proxy URL
proxies = {'http': proxy_url}

print(f"Attempting to connect to the proxy: {proxy_url}")
response = requests.get('http://pd-net-prod-main-1518350640.us-east-1.elb.amazonaws.com/', proxies=proxies)
print(f"Proxy connection successful. Response: {response.text}")
#api_key = os.getenv('ZAP_API_KEY', '5h42cgakvq6ovrsm7rd6dtm2rj')
#zap = ZAPv2(apikey=api_key, proxies=proxies)
#target_url = 'http://pd-net-prod-main-1518350640.us-east-1.elb.amazonaws.com/'
#scan_id = zap.spider.scan(target_url)

#print(f'Spidering target {target_url}...')
#while int(zap.spider.status(scan_id)) < 100:
#    print(f'Spider progress %: {zap.spider.status(scan_id)}')
#    time.sleep(1)

#print('Spider has completed!')
#print('\n'.join(map(str, zap.spider.results(scan_id))))

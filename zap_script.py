import os
import time
from zapv2 import ZAPv2

# Proxy configuration
proxy_url = os.getenv('HTTP_PROXY', 'http://localhost:8081/')  # Update with your proxy URL
proxies = {'http': proxy_url}

print(f"Attempting to connect to the proxy: {proxy_url}")

try:
    # Dummy request to the proxy server to check connectivity
    response = requests.get('http://pd-net-prod-main-1518350640.us-east-1.elb.amazonaws.com/', proxies=proxies)
    print(f"Proxy connection successful. Response: {response.text}")
except Exception as e:
    print(f"Failed to connect to the proxy. Error: {e}")

# Rest of your script...

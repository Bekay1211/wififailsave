import requests
def connect(host = 'http://connectivitycheck.gstatic.com/generate_204'):
    try:
        requests.get(host, timeout = 2)
        return True
    except:
        return False
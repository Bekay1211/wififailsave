from time import sleep
from lib.checkCon import connect
from PyAccessPoint import pyaccesspoint as ap
import progressbar

ap = ap.AccessPoint(wlan = "wlo2", inet = None, ip = "192.168.0.1", netmask = "255.255.255.0", ssid = "lattePanda", password = "stonerUndNerds")


while True:
    print("running..")
    for i in progressbar.progressbar(range(100)):
        sleep(0.2)
    ap.stop() if connect() else ap.start()



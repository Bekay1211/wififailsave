import csv
import subprocess
from os import system as cmd
cmd("ip link set wlo2 up")
networks = subprocess.check_output(["nmcli","-t dev wifi"])
print(networks)
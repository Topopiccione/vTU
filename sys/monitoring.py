import argparse
from influxdb import InfluxDBClient

class Monitoring(object):

    def __init__(self, host='10.10.1.62', port=8086, username='stats_user',
            password='tnova', db_name='statsdb'):
        self.client = InfluxDBClient(host, port, username, password, db_name)


    def send_metric(self, name, value) :
        json_body = [
                {
                    "measurement": name,
                    "fields": {
                        "value": value 
                        }
                    }
                ]
        self.client.write_points(json_body);

if __name__ == '__main__':
    parser = argparse.ArgumentParser(
        description='Send metrics to T-NOVA VIM infrastructure.')
    parser.add_argument('name', action="store")
    parser.add_argument('value', action="store")
    opts = parser.parse_args()
    shell = Monitoring()
    shell.send_metric(opts.name, opts.value)


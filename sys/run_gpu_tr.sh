#
# virtual Transcoding Unit
# Author of this file: Marco Beccari, Alessandro Petrini
# Italtel and Universita' degli studi di Milano, 2015-6
#
libav-2016-01-27/build/avconv -s 1280x720 -i out.yuv -c:v libvpx -b:v 4000k -cuda_me_enabled 1 test.ivf -y

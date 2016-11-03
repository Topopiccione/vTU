libav-2016-01-27/build/avconv -s 1280x720 -i out.yuv -c:v libvpx -b:v 4000k -cuda_me_enabled 1 test.ivf -y

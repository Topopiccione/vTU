<!---
    Copyright 2014-2016 Italtel and Universita' degli studi di Milano

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.

-->
# virtual Transcoding Unit
Italtel and Universita' degli studi di Milano, 2014 - 2016


## Installation
Clone the repository and copy the folder into the /vTU path.

vTU relies on libav for running transcoding jobs and must be correctly installed in the target system.
While avconv is already shippped in many Linux distribution or can be installed using the appropriate packge manager, in order to fully exploit the hardware GPU acceleration in the encoding into h.264, h.265 and VP8 formats, it is recommended to download, compile and install from this fork:

https://github.com/Italtel-Unimi/libvpx
the GPU accelerated VP8 encoder (fully compatible with standard libvpx), and

https://github.com/Italtel-Unimi/libav
the libav supporting the modified libvpx.
Follow the instructions on those repositories for compilation and installation.

Also, vTU supports the NVidia hardware h.264 and h.265 NVEnc encoder supplied with many GPU cards.


## Configuration
vTU can be configured


## Usage
For starting the vTU daemon:
<pre>
/vTU/bin/vTUstart
</pre>

The command stops the vTU, releasing the daemon:
<pre>
/vTU/bin/vTUstop
</pre>
and
<pre>
/vTU/bin/vTUrestart
</pre>
restarts the daemon.

The command:
<pre>
/vTU/bin/vTUstatus
</pre>
returns the status of the vTU daemon and the number of running jobs.


Jobs are started by uploading an appropriate job xml descriptor into the /vTU/vTU/spool folder.


## Credits
Pietro Paglierani (Italtel), Marco Beccari (Italtel), Giuliano Grossi (Universita' degli studi di Milano), Federico Pedersini (Universita' degli studi di Milano), Alessandro Petrini (Universita' degli studi di Milano)

## License
Copyright 2014-2016 Italtel and Universita' degli studi di Milano

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

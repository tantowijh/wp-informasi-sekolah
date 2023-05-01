FROM python:3.8-slim

# Install XQuartz dependencies 
RUN apt-get update && apt-get install -y \ 
    mesa-utils \
    libgl1-mesa-dri \ 
    libxcb1-dev

# Set up passwordless authentication for X11
RUN mkdir -p /root/.ssh \
    && ssh-keyscan -t rsa 192.168.0.100 >> /root/.ssh/known_hosts  \
    && echo '192.168.0.100' >> /root/.ssh/known_hosts \
    && ssh-keygen -f /root/.ssh/id_rsa -t rsa -N '' \
    && cat /root/.ssh/id_rsa.pub >> /root/.ssh/authorized_keys

# Set Xauthority 
ENV XAUTHORITY=/root/.Xauthority  

# Copy current directory contents 
ADD . /workspace
WORKDIR /workspace
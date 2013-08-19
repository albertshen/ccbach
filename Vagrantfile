# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
 
  config.vm.box = "ubuntu-server-12042-x64-vbox4210"

  
  config.vm.box_url = "./ubuntu-server-12042-x64-vbox4210.box"

  config.vm.hostname = "haier"

  
  config.vm.network :forwarded_port, guest: 80, host: 9000

  
  config.vm.network :private_network, ip: "192.168.2.11"


  config.vm.synced_folder "./", "/vagrant", :nfs => true
  #config.vm.synced_folder "./", "/vagrant"


  config.vm.provider :virtualbox do |vb|
  #   # Don't boot with headless mode
  #   vb.gui = true
  #
  #   # Use VBoxManage to customize the VM. For example to change memory:
    vb.customize ["modifyvm", :id, "--memory", "1024"]
  end
  #

  config.vm.provision :puppet do |puppet|
    puppet.module_path = "puppet/modules"
    puppet.manifests_path = "puppet/manifests"
    puppet.manifest_file  = "site.pp"
  end

end

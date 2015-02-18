# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

	## Box
	config.vm.box = "enaco/lamp56dev"
	config.vm.box_url = "http://vagrantbox.enaco.fr/lamp56dev.box"

	## User with sudoers permissions.
	config.ssh.username = "www"

	## Network
	config.vm.network "forwarded_port", guest: 80, host: 8080, auto_correct: true
	config.vm.network "forwarded_port", guest: 3306, host: 3306, auto_correct: true

	## synced_folder
	config.vm.network :private_network, type: "dhcp"
	if Vagrant::Util::Platform.windows?
		require 'yaml'
		vconfig = YAML::load_file(ENV['HOME'] + "/.vagrant/config.yml")
                config.vm.provision :puppet do |puppet|
                        puppet.manifest_file = "syncedfolder.pp"
                        puppet.facter = {
                                "share_device"      => vconfig['directory'],
                                "share_user"        => vconfig['user'],
                                "share_password"    => vconfig['password']
                        }
                end
	else
		config.vm.synced_folder ".", "/data/models", type: "nfs"
	end

	## Provisionning
        config.vm.provision "shell", inline: "apt-get update && apt-get -y upgrade"
	config.vm.provision :shell do |shell|
		shell.inline = "puppet module install --force puppetlabs/concat;"
	end
	config.vm.provision "puppet_server" do |puppet|
   		puppet.puppet_server = "puppetmaster.enaco.fr"
		puppet.puppet_node = "lamp56dev-#{Time.now.getutc.to_i}.enaco.local"
		puppet.options = "--verbose"
 	end
        config.vm.provision :puppet do |puppet|
            puppet.manifest_file = "init.pp"
        end
end



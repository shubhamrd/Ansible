# arogarth.wordpress

Ansible role to install latest wordpress on remote host.

Dependencies: NONE

Tested:
* Ansible 1.6
* OS: Ubuntu Trusty (64bit)

Role will installed Packeges this packages:
* Apache2
* PHP5
* MySQL

# Installation

```
ansible-galaxy install arogarth.wordpress
```

or from github
```
$ git clone https://github.com/arogarth/arogarth.wordpress.git roles/arogarth.wordpress
```
 
# Sample environment with vagrant

Put the following two files an a directory and clone this project. Then you can vagrant up a Virtual Machine.
Wordpress will be accissible by Browser on http://localhost:8080 on your hostsystem.

_Structure_
* Vagrantfile
* playbook.yml
* roles/arogarth.wordpress/

__Vagrantfile__
```ruby
Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.provision "ansible" do |ansible|
     ansible.playbook = 'playbook.yml'
  end
end

```

__playbook.yaml__
```yaml
---

- hosts: all
  sudo: yes
  roles:
    - arogarth.wordpress
```

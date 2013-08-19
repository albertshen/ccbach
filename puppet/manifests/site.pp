Exec { path => "/usr/sbin/:/sbin:/usr/bin:/bin" }
File { owner => 'vagrant', group => 'vagrant' }

node 'default' {
  import 'settings'

  include apt
  include nginx
  include php
  include memcache
  include mysql
  include bashrc
}

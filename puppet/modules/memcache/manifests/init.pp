class memcache {
  package {
    'memcached':
      ensure => present,
      require => Exec['apt-update'];
  }

  service {
    'memcached':
      enable  => true,
      ensure  => running,
      require => Package['memcached']
  }
}

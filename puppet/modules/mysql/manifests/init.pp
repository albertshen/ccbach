class mysql {
  package {
    ['mysql-common', 'mysql-client', 'mysql-server']:
      ensure => present,
      require => Exec['apt-update'];
  }

  service {
    'mysql':
      enable  => true,
      ensure  => running,
      require => Package['mysql-server']
  }

  file {
    '/etc/mysql/my.cnf':
      source  => 'puppet:///modules/mysql/my.cnf',
      require => Package['mysql-server'],
      notify  => Service['mysql'];
  }
}

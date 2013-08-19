class php {
  # install order is important to avoid apache2 being installed to provide
  package {
    'php5-cli':
      ensure  => present,
      require => Exec['apt-update'];
    ['php5-mysql', 'php5-curl', 'php5-intl', 'php5-fpm', 'php5-gd', 'php5-memcache', 'php-apc', 'php5-dev', 'php-pear', 'php5-xdebug', 'php5-imagick', 'php5-mcrypt']:
      ensure  => present,
      require => Package['php5-cli'];
  }

  service {
    'php5-fpm':
      enable    => true,
      ensure    => running,
      require   => Package['php5-fpm'];
  }

  file {
    '/etc/php5/fpm/php.ini':
      source  => 'puppet:///modules/php/php.ini',
      require => Package['php5-fpm'],
      notify  => Service['php5-fpm'];
    '/etc/php5/fpm/pool.d/www.conf':
      source  => 'puppet:///modules/php/www.conf',
      require => Package['php5-fpm'],
      notify  => Service['php5-fpm'];
    '/etc/php5/mods-available/apc.ini':
      source  => 'puppet:///modules/php/apc.ini',
      require => Package['php5-fpm'],
      notify  => Service['php5-fpm'];

  }
}

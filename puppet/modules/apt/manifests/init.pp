class apt {
  # for PPA
  package {
    'python-software-properties':
      ensure => present
  }
  # use cn.archive.ubuntu.com mirror, faster in China
  file {
    '/etc/apt/sources.list':
      source => 'puppet:///modules/apt/sources.list',
  }
  exec {
    'ppa-add-repo-php5':
      command => 'add-apt-repository ppa:ondrej/php5',
      creates => '/etc/apt/sources.list.d/ondrej-php5-precise.list',
      require => Package['python-software-properties'];
    'ppa-add-repo-nginx-stable':
      command => 'add-apt-repository ppa:nginx/stable',
      creates => '/etc/apt/sources.list.d/nginx-stable-precise.list',
      require => Package['python-software-properties'];
    'apt-update':
      command => 'aptitude -y update && touch /root/.apt-update',
      creates => '/root/.apt-update',
      require => [File['/etc/apt/sources.list'], Exec['ppa-add-repo-php5', 'ppa-add-repo-nginx-stable']];
  }

}

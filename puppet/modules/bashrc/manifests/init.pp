class bashrc {
  exec {
    'bashrc-config':
      command => 'cp -r /home/vagrant/.bashrc /home/vagrant/.bashrc.bak',
      require => [File['/home/vagrant/.bashrc'], File['/etc/bash_completion.d/symfony2-autocomplete.bash']];
  }

  file {
    '/home/vagrant/.bashrc':
      force        => true,
      recurse      => true,
      source       => 'puppet:///modules/bashrc/bashrc',
      sourceselect => all,
      owner        => 'root',
      group        => 'root';
    '/etc/bash_completion.d/symfony2-autocomplete.bash':
      force        => true,
      recurse      => true,
      source       => 'puppet:///modules/bashrc/symfony2-autocomplete.bash',
      sourceselect => all,
      owner        => 'root',
      group        => 'root';
  }

}

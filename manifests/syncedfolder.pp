package { 'cifs-utils':
	ensure => "installed"
}

file { '/data':
	ensure	=> "directory"
}

mount { "/data":
	device  => "$share_device",
	fstype  => "cifs",
	ensure  => "mounted",
	options => "username=$share_user,password=$share_password,uid=1001,gid=33,file_mode=0770,dir_mode=0770",
	atboot  => "true",
	require => [
		File['/data'],
		Package['cifs-utils']
	]
}
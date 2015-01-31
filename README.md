Team Enterprise Resource Management (TeamERP) 
========================

Welcome to the TeamERP - the aim of this project is to create a fully-functional Symfony2
application for Enterprise management. For now I have done only the customer care bundle,
but very soon I'll continue adding more and more functionality and other modules.

This document contains information on how to download, install, and start
using TeamERP. Before installing TeamERP you are supposed to have met the Symfony requirements
(See then in the Symfony README.md with this copy of the software or at www.symfony.com).

This software is distributed under MIT license.
 
1) Installation Instructions
----------------------------------

When it comes to installing the TeamERP is similar to installing Symfony Standard Edition, you have the
following options.

### Use Composer (*recommended*)

As Symfony uses [Composer][2] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

create the composer.json file wit the following content:

Here is a sample fragment of composer.json that installs the same package via a VCS repo:

{
    "repositories": [
        {
            "url": "https://github.com/aguzmans/TeamERP.git",
            "type": "git"
        }
    ],
    "require-all": true
} 

Or you can also follow this manual: 
https://getcomposer.org/doc/articles/handling-private-packages-with-satis.md
But remember that this project does not installs the default symfony vendors and other staff.

Then, use the `create-project` command to generate a new Symfony application:

    php composer.phar create-project symfony/framework-standard-edition path/to/TeamERP

Composer will install Symfony and TeamERP and all its dependencies under the
`path/to/TeamERP` directory.

2) Checking your System Configuration
-------------------------------------

Before starting with TeamERP, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:

    http://localhost/path/to/symfony/app/web/config.php

If you get any warnings or recommendations, fix them before moving on.

All libraries and bundles included in the Symfony and TeamERP Standard Edition are
released under the MIT, BSD or GPL equivalent license.

Road Map:
Social media integration and Social media management:

If you want to build strong relationships with your customers,
 you need to be where they are.  If they are active on social media,
 you need to be there too.  Social media can be very time consuming, 
so you need the right tools to help you manage your interactions and 
different platforms.

Text messaging (SMS)

Getting agreement to use text to contact your customers is very powerful.  
You know that texts will get read.  Follow best practice and your customers 
will love it as much as you.

Calendar and tasks (and integration with google calender or/and microsoft platform):

Whether you are a lone marketer, or a team who need to share, 
the InTouch calendar and tasks function will keep you organised 
and help you get more done.

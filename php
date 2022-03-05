---
- name: Edit web file
  template:
    src: php.j2
    dest: /var/www/html/hello.php


----------------------------------------------------------------------

<?php
echo "Hello PHP world from {{ ansible_fqdn }}";
     phpinfo();
?>

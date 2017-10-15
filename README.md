# Student Grading

โปรแกรมตัดเกรดสำหรับแนะนำการใช้งาน PHPUnit

## Required Softwares

1. PHP เวอร์ชัน 7.x (เครื่องที่ใช้ demo คือ 7.1.8)
1. Composer เวอร์ชันล่าสุด ดูวิธีการติดตั้งได้จาก [getcomposer.org](https://getcomposer.org/doc/00-intro.md)

ทุกโปรแกรมควรเรียกใช้ได้ผ่าน Terminal (Linux, macOS) หรือ Command Prompt (Windows) ครับ 
ตรวจสอบได้ด้วยการเรียกใช้คำสั่ง ด้านล่าง

### PHP
```bash
$ php --version
PHP 7.1.8 (cli) (built: Aug  7 2017 15:02:45) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies
    with Xdebug v2.5.5, Copyright (c) 2002-2017, by Derick Rethans
```

### Composer
```bash
$ composer --version
Composer version 1.5.1 2017-08-09 16:07:22
```

## ทดสอบการใช้งาน
เพื่อให้ใช้ข้อมูลชุดเดียวกันในการสาธิตการใช้งาน PHPUnit จึงจะใช้โค้ดภายใน Repository นี้ โดยมีวิธีการนำไปใช้ดังต่อไปนี้

### นำซอร์สโค้ดไปใช้งานต่อ
* Clone Repository ด้วยคำสั่งด้านล่าง

```bash
$ git clone git@github.com:sitdh/phpunit-grading.git 
```

* ดาวน์โหลด
  1. เลือกปุ่ม *Clone or download* ด้านขวา
  1. เลือกปุ่ม *Download ZIP* ไฟล์ซอร์สโค้ดจะเริ่มดาวน์โหลดลงมายังเครื่อง

### ทดสอบการติดตั้ง

* เปลี่ยนโฟลเดอร์ที่ใช้งานไปยังโฟลเดอร์ของซอร์สโค้ดที่เตรียมไว้ในเครื่อง

```bash
$ cd /path/to/phpunit-grading
```

* ติดตั้ง dependency packages

```bash
$ composer update
```

* ทดสอบการติดตั้งโดยเรียกใช้คำสั่ง 

`./vendor/bin/phpunit --bootstrap=vendor/autoload.php test/GradingTest` 

* ซึ่งจะได้ผลลัพธ์ของคำสั่งด้านล่าง

```bash
$ ./vendor/bin/phpunit --bootstrap=vendor/autoload.php test/GradingTest

PHPUnit 6.3.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 97 ms, Memory: 10.00MB

OK (1 test, 1 assertion)
```

*Windows*
```bash
C:\Path\To\phpunit-grading\vendor\bin\phpunit --bootstrap=.\vendor\autoload.php .\test\GradingTest
```

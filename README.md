# ct519-Myhobbies
 สอบปลายภาค Cloud Computing
# http://18.140.117.42/ pathweb
# CT519

### หลักการออกแบบ 
แยกระบบออกเป็นหน้าบ้านและหลังบ้าน โดยใช้หน้าบ้านเป็น html+css+bootstrap และหลังบ้านเป็น php และฐานข้อมูลเป็น mariadb ที่เป็น relation database
และใช้ cloud Aws docker แบ่งเป็น frontend และ backend แยก container กัน
ส่วน cloud ที่ใช้ deploy นั้นจะเป็น aws ec2 

### สถาปัตยกรรม 
arm64 

### topology ของระบบ 
1.frontend(html+css+bootstrap+javascript) connects to backend(php) method Post and get
2.backend connects to mariadb 
3.each container connects to each other by docker network

### การออกแบบฐานข้อมูล 
ใช้ mariadb สร้าง database hobbies and create table list
column id / ชื่อ / คำอธิบาย / รูป
โดยแต่ละแบบจะมีการเก็บ data type ต่างกันไป เช่น ชื่อกับคำอธิบายจะเก็บเป็น STRING รูปจะ บันทึก path และ อัพโหลดรูปขึ้น db

### การอธิบายส่วนของ code ที่สำคัญ  
จะเป็นด้านการทำระบบหลังบ้าน <br />
โดยเว็บจะมี 4 หน้า แยกองค์ประกอบเป็น <br />
connection.php <br />
navbar.php <br />
footer.php <br />
*-------------* 
โดยทุกหน้าจะเรียกเหมือนกันคือ include(navbar.php) , include(footer.php); ที่แตกต่างกันจะเป็นส่วน contence ใน page <br />
index.php หน้านี้จะใช้ method get ดึงข้อมูลจาก sql มาแสดงเป็น card โดยใช้ boostrap <br />
hobbies.php หน้านี้จะใช้ method get ดึงข้อมูลจาก sql มาแสดงเป็น table โดยใช้ boostrap และมีปุ่ม add_hobbies เพื่อไปหน้า add_hobbies.php <br />
|- table จะมี column action มีสองปุ่มคือ edit,del <br />
|--edit หน้านี้จะใช้ method get ดึงข้อมูลจาก sql มาแสดง form เพื่อรับข้อมูลจาก form พอกด submit จะแก้ update table list <br />
|--delete หน้านี้จะใช้ method get ดึงข้อมูลจาก sql มาลบพอลบเสร็จจะกลับไปหน้าเดิม <br />
about.php หน้านี้จะเป็น html css bootstrap เพียวๆ<br />
research.php หน้านี้จะเป็น html css bootstrap เพียวๆ<br />

### การเตรียมการระบบ Cloud 
เป็นการใช้ ec2 โดยใช้ aws linux ในการทำ และ install docker environment รวมถึง git เพืื่อ clone data มาเพื่อ deploy 

version: '3' # เป็นการระบุว่าเราจะใช้ Compose file เวอร์ชั่นไหน 
services: # เป็นการระบุ container ที่จะต้องใช้ มี 2 container คือ web and db
  web:
    build: #สั่งให้ใช้ image ที่สร้างจาก Dockerfile
      context: ./myweb #path ไปที่ folder myweb
      dockerfile: Dockerfile # เรียกใช้ Dockerfile
    container_name: myweb # กำหนดชื่อ container
    ports:
      - "80:80" #map port 80 จาก ec2 ไป 80 docker
    volumes:
      - ./myweb:/var/www/html  #สร้างพื้นที่การทำงานโดยให้ myweb ทำงานที่ /var/www/html

  db: #เป็นการระบุ container ที่จะต้องใช้ container คือ db
    image: mariadb:10.4 #สั่งให้ใช้ image ที่ชื่อ mariadb:10.4
    container_name: mariadb #ตั้งชื่อ container ว่า mariadb
    environment: # ตั้งค่าสภาพแวดล้อม 
      MYSQL_ROOT_PASSWORD: #root กำหนด superuser คือ root
      MYSQL_DATABASE: myhobbies # กำหนด database name คือ myhobbies
      MYSQL_USER: kittinun # กำหนด database uses คือ kittinun
      MYSQL_PASSWORD: 65130695 # กำหนด database password คือ 65130695
    volumes:
      - ./mysql:/docker-entrypoint-initdb.d # กำหนดให้ใช้สภาพแวดล้อมใน folder mysql โดยมี sql create table and insert data
    ports:
      - "3306:3306" #map port 80 จาก ec2 ไป 80 docker
volumes:
  db_data: 

การ deploy ตัว code มาทำงาน<br />
1.สร้างเว็บและ sql ให้เรียบร้อย พร้อมทั้ง dockerfile และ docker-compose.yaml<br />
2.เตรียม git ให้พร้อม<br />
3.สร้าง repositories ct519-Myhobbies<br />
4.อัพโหลด 1 ขึ้น repositories ct519-Myhobbies<br />
5.ใน Aws install docker engine ให้เรียบร้อย<br />
6.ใน Aws install docker compose ให้เรียบร้อย<br />
7.ใน command line git clone https://github.com/Kittinun-Roonsungneon/ct519-Myhobbies<br />
8.cd ct519-Myhobbies<br />
9.chmod -R 777 all file and folder<br />
10.docker-compose up --build <br />
*--------------------*
กรณีทำผิดพลาดให้กลับไปแก้ <br />
1.sudo docker stop $(sudo docker ps -aq) <br />
2.sudo docker rm $(sudo docker ps -aq)  <br />
3.ไปขั้นตอนที่ 7-11 ใหม่<br />

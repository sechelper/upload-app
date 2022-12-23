# upload-app

## config
```
vulab@sechelper:~$ sudo docker exec -it 9c118524d893 ps -ef
UID          PID    PPID  C STIME TTY          TIME CMD
root           1       0  0 08:05 ?        00:00:00 apache2 -DFOREGROUND
www-data      16       1  0 08:05 ?        00:00:00 apache2 -DFOREGROUND
www-data      17       1  0 08:05 ?        00:00:00 apache2 -DFOREGROUND
www-data      18       1  0 08:05 ?        00:00:00 apache2 -DFOREGROUND
www-data      19       1  0 08:05 ?        00:00:00 apache2 -DFOREGROUND
www-data      20       1  0 08:05 ?        00:00:00 apache2 -DFOREGROUND
www-data      21       1  0 08:05 ?        00:00:00 apache2 -DFOREGROUND
root          57       0  0 08:10 pts/0    00:00:00 ps -ef
vulab@sechelper:~$ sudo docker exec -it 7ccc5d415a31 chown www-data /var/www/html/upload
vulab@sechelper:~$ sudo docker exec -it 7ccc5d415a31 chmod -R 755 /var/www/html/upload
```
## ref
- [permission-denied-error](https://stackoverflow.com/questions/8103860/move-uploaded-file-gives-failed-to-open-stream-permission-denied-error)

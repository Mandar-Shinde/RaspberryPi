# LED Pin - wiringPi pin 0 is BCM_GPIO 17.

PIN=0

gpio mode $PIN out


  gpio write $PIN 0

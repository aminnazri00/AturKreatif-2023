![image](https://github.com/aminnazri00/AturKreatif-2023/assets/93955436/9fcea8e2-d90a-46b0-88f3-3723d1137d8a)

Based from the question we can conclude that they are server listening from

1. IP 146.190.82.37 from UDP port on port 63424
2. The receive bytes are 2048 and it uses utf-8 for encoded and decoded

the password that in the file is are encoded in base64 format in which you are required to decode it back from base64

encoded = NDd1cmtyMzQ3aWZ7aV93YW50X3RvX2ZpbmRfdGhlX3JlYWxfeW91fQ==
decoded = 47urkr347if{i_want_to_find_the_real_you}

There is two method that can be used for this qeustion which is by creating the python script and the second one is by sending and echo using netcat or nc.

The first method is to create a script in which can looked like this

...
![image](https://github.com/aminnazri00/AturKreatif-2023/assets/93955436/af806b51-57aa-4c14-85d6-b105307f4203)
...

The second method is bby sending an echo of the flag to the server which will look like this

**echo "47urkr347if{i_want_to_find_the_real_you}" | nc -u 146.190.82.37 63424**

the problem with the command above is that it will return incorrect flag no matter what, the reason being is that when an echo is send to the server it will take your Enter input into the echo in which you need to add other command that can resolve the Enter input

**echo -n "47urkr347if{i_want_to_find_the_real_you}" | nc -u 146.190.82.37 63424**

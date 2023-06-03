![image](https://github.com/aminnazri00/AturKreatif-2023/assets/93955436/ab5767d8-2c6e-4ac8-98b1-a418b29bf31d)


From the question we will take a few notes what is important in the question.
1. The server are listening from 149.190.82.37 from port ranges from 56000 - 57000
2. Give the correct word
3. The flag is in strings format which is 47urkr347if{Flag} 

From there we are required to search which correct port that the server are listening.
use nmap command which allow us to know which port are open in that range

**nmap 149.190.82.37 -p 56000-57000**

The next step is to use netcat or nc to connect with the port

**nc 149.190.82.37 [PORT]**

but if we only use that command it will only return meaningless value, what we are trying 
to find is a flag in strings format, so we will implement strings functions in the command.

**nc 149.190.82.37 [PORT] | Strings**

Now the output will return all strings value but we still cannot see the flag as it will only
output certain strings, remember the flag is in the output but in order to see the flag we need
to ensure that the only output is the flag so we will implement the command below

**nc 149.190.82.37 [PORT] | Strings | grep "47urkr347if"**

Now we can clearly see the flag where it will only output at certain times because we see the
earlier output it comes out in streams of output. So to get the flag we need to wait until the 
condition is the same when trying to intercept the streams of output.

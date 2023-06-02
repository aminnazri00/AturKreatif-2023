The system displayed the tracking website that has the illegal package's tracking number

![image](https://github.com/aminnazri00/AturKreatif-2023/assets/86725014/8d9231bf-6516-46e1-8425-60d4058326ef)

1. Can track normal traking number by entering 100920001 or 100920002 or 100920003. It will display the normal package status and other details.
2. Insert any one of the SQL syntax in the box such as ' OR 1 -- - or others but the website will filter because only accept numbers only.
3. Open burp suite and intercept the search box in the website.

![image](https://github.com/aminnazri00/AturKreatif-2023/assets/86725014/d9441653-048b-4543-a6c3-4f1a813dae6a)

5. Enter the id with SQL syntax below
    
    -1' UNION SELECT null,null,null,null,null,null-- 
    (Note: Insert space after last dash)

6. It will show result with no data.
7. Insert @@version on one of the null will give the current version of the database.

    -1' UNION SELECT null,null,null,null,null,@@version-- 
    (Note: Insert space after last dash)

8. After get the version and what type of the database, we can figure out how their syntax to enter. Enter next command:

    -1' UNION SELECT null,null,null,null,null,information.-- 
    (Note: Insert space after last dash)

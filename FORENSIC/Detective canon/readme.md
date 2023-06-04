# Detective canon Challenge Write Up
We are given auth.log and instructed to locate a user who successfully logged in. The motive for this challenge is to introduce and expose us to part of blue team job scope in analyzing log from an incident. The auth.log will keep authentication logs for both successful or failed logins, and authentication processes in a Linux system.

## Steps
1. auth.log will store both successful and failed login attempt, with `Accepted Password` and `Failed Password` labelled. We can just hit `ctrl + f` to find `Accepted` from the auth.log.

**:ghost: THATS IT WE FOUND THE FLAG! :ghost:**

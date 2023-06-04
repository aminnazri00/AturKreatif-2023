VULNERABILITY:- UNENCRYPTED NETWORK

1. Open the file using wireshark.

2. Click on File -> Export Object -> HTTP

![image](https://github.com/aminnazri00/AturKreatif-2023/assets/86725014/ff145366-2a5e-4581-8bb5-8dd9342987ea)

3. Save all or UFADMFDS.gif only

4. Open in terminal the directory where save the file.

5. Track the file using binwalk like command below:

```
binwalk UFADMFDS.gif
```

6. Extract the gif using commad below:

```
binwalk -e UFADMFDS.gif
```

7. Change directory to _UFADMFDS.gif.extracted

```
cd _UFADMFDS.gif.extracted
```

8. Concatenate file f0und-me.txt

```
cat f0und-me.txt
```

9. Decode the flag with base64 using command:

```
echo "NDd1cmtyMzQ3aWZ7aWNwdHdla21rc2dxYmFlfQ==" | base64 -d
```
 

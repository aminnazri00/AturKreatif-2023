# Key Pressed Write Up
The challenge provide us with usb1.pcapng which is a packet capture file that can be open with wireshark for us to analyze. The motive for this challenge is to introduce us to the USB protocol.

## Steps
1. Open the pcap file with wireshark and start analyze the log. Reading about USB reveals that there are four basic modes of transfer for USB: The ‘transfer_type’ specifies if this transfer is isochronous (0), interrupt (1), control (2) or bulk (3) [USB Wireshark](https://gitlab.com/wireshark/wireshark/-/wikis/USB).
2. The file is pretty small and most of it are the URB_INTERRUPT events that encode key presses labelled as HID Data. The suspicion is that the flag is encoded in them. 
3. To filter out only the packet we want, we can filter them by `usb.src == 1.9.1 && !usbhid.data == 00:00:00:00:00:00:00:00` to get data from the key pressed.

![image](https://github.com/aminnazri00/AturKreatif-2023/assets/58243519/c0335f03-1a8a-4c97-ae26-d5e31ac88fa2)


4. Now we can refer to [HID Usage Tables](https://usb.org/sites/default/files/hut1_4.pdf) on page **19** to decode the HID Data to keyboard key.

![image](https://github.com/aminnazri00/AturKreatif-2023/assets/58243519/fa1ee578-640d-467d-8822-bc5e1216269b)


5. We can decode it manually one by one which will take a lot of time, or we could make a python script to decode it.
6. Open terminal and use tshark to read pcapng packet format. Use this command `tshark -r usb1.pcapng -T fields -e usbhid.data -Y "usb.src == 1.9.1" | grep -v 0000000000000000 > out.txt`, to filter just like we filter in wireshark then stored it as out.txt file.

![image](https://github.com/aminnazri00/AturKreatif-2023/assets/58243519/10672225-99ab-4fb2-b229-f23fce45a73f)


7. Then we can create pyhton script and save it as decode.py:
```
#!/usr/bin/python3
import sys

if len(sys.argv) != 2:
    print("[!] USAGE: ./decode.py <file.pcap>")
    exit()

usb_codes_printable = { #https://www.usb.org/sites/default/files/documents/hut1_12v2.pdf
    0x04:"aA",      0x05:"bB",      0x06:"cC",      0x07:"dD",      0x08:"eE",      0x09:"fF",
    0x0A:"gG",      0x0B:"hH",      0x0C:"iI",      0x0D:"jJ",      0x0E:"kK",      0x0F:"lL",
    0x10:"mM",      0x11:"nN",      0x12:"oO",      0x13:"pP",      0x14:"qQ",      0x15:"rR",
    0x16:"sS",      0x17:"tT",      0x18:"uU",      0x19:"vV",      0x1A:"wW",      0x1B:"xX",
    0x1C:"yY",      0x1D:"zZ",      0x1E:"1!",      0x1F:"2@",      0x20:"3#",      0x21:"4$",
    0x22:"5%",      0x23:"6^",      0x24:"7&",      0x25:"8*",      0x26:"9(",      0x27:"0)",
    0x2C:"  ",      0x2D:"-_",      0x2E:"=+",      0x2F:"[{",      0x30:"]}",      0x31:"\|",
    0x32:"#~",      0x33:";:",      0x34:"\'\"",    0x35:"`~",      0x36:",<",      0x37:".>",
    0x38:"/?",      0x54:"//",      0x55:"**",      0x56:"--",      0x57:"++",      0x59:"11",
    0x5A:"33",      0x5B:"44",      0x5C:"55",      0x5D:"66",      0x5E:"77",      0x5F:"88",
    0x60:"99",      0x61:"00"
    }

file_path = sys.argv[1]

def read_file_lines(file):
    lines = []
    with open(file, 'r') as text:
        for line in text:
            lines.append(line.strip())
    return lines

lines_array = read_file_lines(file_path)
output =""

for line in lines_array:
    hex = int(line[4:6],16)
    
    if hex in usb_codes_printable.keys():
        if int(line[0:2],16) == 2: #shift
            output+=usb_codes_printable[hex][1]
            # print(f"shift: {output}")
        else: output+=usb_codes_printable[hex][0]
    elif (hex == 0):
        continue
    else:
        print(f"Unknown stroke: {hex}")

print(output)
```
8. Lastly we can run the script just like this `python3 decode.py out.txt`.
**:ghost: THATS IT WE GET THE FLAG :ghost:**


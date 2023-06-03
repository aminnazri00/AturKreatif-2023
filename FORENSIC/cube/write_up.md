# Cube Challenge Write up
The challenge description stated **The flag is the outermost of the image.** and when we download the image provided **4D.jpg** there is a **Dimension** keyword.
Image's dimensions consists of its **width and height** which could be change by alter its hex value.

## Steps
We need to determine where the height is marked in the JPG image based on typical JPEG markers. The table below shows the baseline Start of Frame (SOF0) starts at **0xFF 0xC0.**

![Common JPEG markers](https://github.com/aminnazri00/AturKreatif-2023/assets/58243519/12d84d7f-c611-43a1-86f5-52df12841f3c)



1. Open [CyberChef](https://gchq.github.io/CyberChef/) and upload the 4D.jpg to convert it to hex by selecting the "To Hex" operation.

![Image to Hex](https://github.com/aminnazri00/AturKreatif-2023/assets/58243519/a3af53db-3b79-4dfa-aae7-f6d4e4963abb)


2. Copy the hex output and paste it as input. Clear the "To Hex" recipe by clicking the trash icons. Then select "From Hex" and "Render Image" operation to convert the hex to image.
3. As we know the image width and height byte is located at  Start of Frame (SOF0) which starts at **0xFF 0xC0** Hit  `ctrl + f` on the input panel and search for **0xFF 0xC0**. 

![Image width and height](https://github.com/aminnazri00/AturKreatif-2023/assets/58243519/e27a5171-9b9c-445d-95e8-b9cf61fcc48e)


4. We know the marker starts on **0xFF 0xC0**, however where is the width and height bytes for us to edit? This is what we found after googling [JPEG File Format](https://tacodewolff.nl/posts/20120220-jpeg-file-format/). The position is after the precision of 8 bits **08**, which in this case is `06 E3 06 33`.

![Screenshot 2023-06-03 211500](https://github.com/aminnazri00/AturKreatif-2023/assets/58243519/80486dcb-ed1f-4e61-8b62-18225481542a)








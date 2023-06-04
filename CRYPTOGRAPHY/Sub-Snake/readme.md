flagDict = {'A':'tube','B':'calf','C':'mars','D':'shot','E':'herd','F':'loss','G':'pump','H':'loan','I':'doll','J':'main',
        'K':'book','L':'fame','M':'nail','N':'snow','O':'rise','P':'tent','Q':'jest','R':'edge','S':'duke','T':'able',
        'U':'heal','V':'bake','W':'cope','X':'slow','Y':'knit','Z':'miss','a':'wind','b':'twin','c':'hair','d':'call',
        'e':'coin','f':'pack','g':'crew','h':'curl','i':'sand','j':'pull','k':'pear','l':'heel','m':'cave','n':'maze',
        'o':'note','p':'hike','q':'wall','r':'camp','s':'shop','t':'feed','u':'coup','v':'lion','w':'core','x':'gate',
        'y':'half','z':'busy','0':'acid','1':'soft','2':'fine','3':'calm','4':'nosy','5':'lush','6':'null','7':'sick',
        '8':'easy','9':'keen','_':'long','(':'ajar',')':'open','{':'flat','}':'wide',' ':'ajim',',':'onio','.':'mata'}


word_size = 4

enChunk = [encFlag[i:i + word_size] for i in range(0, len(encFlag), word_size)]

decFlag = ""

pos = ""

val_list = list(flagDict.values())

key_list = list(flagDict.keys())

for x in range(len(enChunk)):
    for key, values in flagDict.items():
        if enChunk[x] == values:
            pos = val_list.index(values)
            decFlag += key_list[pos]     
            
print(decFlag)

After that find the flag that are in hex format where you are required to decode it

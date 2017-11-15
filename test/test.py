import json
test = open('test.txt', 'r').readlines()
count1=0
finaltest = ""
for lineas in test:
    if lineas not in ['\n', '\r\n']:
        if count1 % 5 == 0:
            finaltest = finaltest + "[[\'"+lineas.replace("\n", "")+"\'],"
        elif count1 % 5 == 4:
            finaltest = finaltest + "[\'"+lineas.replace("\n", "")+"\']],"
        else:
            finaltest = finaltest + "[\'"+lineas.replace("\n", "")+"\'],"
        count1 = count1 + 1
finaltest = "["+finaltest+"]"
finaltest = eval(finaltest)
respuesta = open('respuestacorrecta.txt', 'r').readlines()
count2 = 0
for res in respuesta:
    finaltest[count2].append(res.replace("\n", "").replace("a", '1').replace("b", '2').replace("c", '3').replace("d", '4'))
    count2 = count2 + 1
with open('eltestfinal.txt', 'w', encoding='utf-8') as outfile:
    json.dump(finaltest, outfile, ensure_ascii=False)
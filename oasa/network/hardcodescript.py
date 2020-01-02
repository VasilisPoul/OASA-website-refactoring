file = open('recs.txt', 'r')
newFile = open('htmlFile.txt', 'w')
line = file.readline()
while line:
    splitLine = line.split()
 
    htmlString = """<tr> <th scope="row">{}</th> <td>{}</td> <td>{}</td> <td>{}</td> <td>{}</td> <td>{}</td> </tr>""".format(splitLine[0],splitLine[1],splitLine[2],splitLine[3],splitLine[4],splitLine[5])
    htmlString.replace("_", " ")
    print(htmlString)
    newFile.write(htmlString)
    newFile.write('\n')
    line = file.readline()
file.close()
newFile.close()
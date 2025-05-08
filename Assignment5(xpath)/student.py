from lxml import etree

xml = """
<students>
  <student>
    <name>samruddhi</name>
    <roll_no>44</roll_no>
  </student>
  <student>
    <name>samiksha</name>
    <roll_no>30</roll_no>
  </student>
</students>
"""

tree = etree.fromstring(xml)
names = tree.xpath('//student/name/text()')
print(names) 

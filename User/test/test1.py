def main():
"""Create instance of FieldStorage""" 
dat = cgi.FieldStorage( keep_blank_values = True ) 

Start_date = "07/01/2013"
dc = ['las','sjc']
sys = "All"



result = [{"startdate":Start_date,"datacenter":dc,"system":sys}]

print json.dumps(result)

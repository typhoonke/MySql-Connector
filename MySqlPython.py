import mysql.connector

# Establish a connection to the MySQL server
cnx = mysql.connector.connect(
    host='your_host',
    user='your_user',
    password='your_password',
    database='your_database'
)

# Close the connection
cnx.close()

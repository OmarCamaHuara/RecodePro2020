from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def main():
    return render_template('index.html')

@app.route("/send", methods=["POST"])
def send(sum = sum):
    if(request.method == "POST"):

        operation = request.form["opc"]

        nro1 = request.form["num1"]
        nro2 = request.form["num2"]
            
        if( operation == "soma"):
            sum = int(nro1) + int(nro2)
            return render_template('index.html', sum = sum )
            
        elif( operation == "subt"):
            sum = int(nro1) - int(nro2)
            return render_template('index.html', sum = sum )
            
        elif( operation == "mult"):
            sum = int(nro1) * int(nro2)
            return render_template('index.html', sum = sum )

        elif( operation == "divi"):
            sum = int(nro1) // int(nro2)
            return render_template('index.html', sum = sum )
        else: 
            return render_template('index.html', sum = sum)

app.run();
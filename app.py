from flask import Flask, render_template, request, jsonify
from modules.Neuron import Neuron
from modules.Synapses import Synapse

app = Flask(__name__)

neurons = {}
synapses = {}

@app.route("/addNeuron", methods=["POST"])
def receive_data():
    data = request.get_json()
    for neuron in data: 
        name = neuron["name"]
        neurons[name] = Neuron(
            threshold=neuron["threshold"],
            id=neuron["id"],
            name=neuron["name"]       
        )
    print(neurons)
    return "OK", 200

@app.route("/createSynapse",methods=["POST"])
def connectNeurons():
    data = request.get_json()
    for synapses in data:
        name = synapses.get("fromName") + "to" + synapses.get("toName")
        print(name)
        from_id = neurons[synapses.get("fromName")]
        to_id = neurons[synapses.get("toName")]
        synapses[name] = Synapse()
        synapses[name].nameToId(from_id,to_id)
    return "OK", 200
        
        


if __name__ == "__main__":
    app.run(debug=True)


from flask import Flask, render_template, request, jsonify
from modules.Neuron import Neuron
from modules.Synapses import Synapse

app = Flask(__name__)

neurons = {}
synapses = {}
next_id = 1
neuron_names = []
synapse_names =[]

@app.route("/api/addNeuron", methods=["POST"])
def receive_data():
    global next_id
    data = request.get_json()
    for neuron in data: 
        name = neuron["name"]
        neuron_names.append(name)
        neurons[name] = Neuron(
            threshold=neuron["threshold"],
            id=next_id,
            name=neuron["name"]       
        )
        next_id += 1
    return jsonify(neuron_names), 200

@app.route("/api/createSynapse",methods=["POST"])
def connectNeurons():
    data = request.get_json()
    for synapse in data:
        name = synapse.get("fromName") + "to" + synapse.get("toName")
        synapse_names.append(name)
        print(name)
        from_id = neurons[synapse.get("fromName")]
        to_id = neurons[synapse.get("toName")]
        synapses[name] = Synapse()
        synapses[name].nameToId(from_id,to_id)
    return jsonify(synapse_names), 200

@app.route("/api/simulate", methods="POST")
def fireConnections():
    data = request.get_json()
    for activatedNeuron in data:
        pass


        
        


if __name__ == "__main__":
    app.run(debug=True)


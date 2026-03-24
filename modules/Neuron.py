class Neuron:
    def __init__(self,threshold,name,id):
        self.name = name
        self.threshold = threshold
        self.id = id
        self.activated = False
    
    def check_activation(self, synapses):
        for synapsis in synapses:
            totalWeigh += synapsis.get("weight", 0)
            if totalWeigh >= self.threshold:
                self.activated = True
                return self.activated
        self.activated = False
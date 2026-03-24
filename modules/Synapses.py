class Synapse:
    def __init__(self):
        self.from_id = int()
        self.to_id = int()
        self.weight = int()

    def nameToId(self,startNeuron, endNeuron):
        self.from_id = startNeuron
        self.to_id = endNeuron
    
    def fireImpulse(self):
        pass
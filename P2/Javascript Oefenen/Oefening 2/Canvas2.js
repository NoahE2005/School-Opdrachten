var MyObject; //Aan dit object koppelen we een figuur
var CanvasNieuw;

function startCanvas() {
    CanvasNieuw = document.createElement("canvas");
    CanvasNieuw.width = 500;
    CanvasNieuw.height = 500;
    document.body.insertBefore(CanvasNieuw, document.body.childNodes[0]);

    MyObject = new OnsObject(30,30, "red", 20, 120);

}

function OnsObject(Breedte, Hoogte, Kleur, X, Y) {
    this.Breedte = Breedte;
    this.Hoogte = Hoogte;
    this.X = X;
    this.Y = Y;
    ctx = CanvasNieuw.getContext("2d");
    ctx = fillStyle = Kleur;
    ctx = fillRect(this.X ,this.Y , this.Breedte, this.Hoogte);
}
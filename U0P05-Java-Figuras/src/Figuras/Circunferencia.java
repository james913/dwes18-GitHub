package Figuras;

public class Circunferencia extends Figura {
	private double radio;
	

	public Circunferencia( double radio, String titulo, Color c) {
		super(titulo,c);
		this.radio=radio;
	}

	public double calcularArea () {
	double area=0;
	area= Math.PI*(Math.pow(radio, 2));
	return area;
	
	}
	
	public double calcularPerimetro() {
		double perimetro=0;
		perimetro=2*Math.PI*radio;
		
		return perimetro;
	}
	
	
	public double getRadio() {
		return radio;
	}

	public void setRadio(double radio) {
		this.radio = radio;
	}

	@Override
	public String toString() {
		return "Circunferencia [radio=" + radio + ", calcularArea()=" + calcularArea() + ", calcularPerimetro()="
				+ calcularPerimetro() + ", getRadio()=" + getRadio() + super.toString()+ "]";
	}


	
	
	
}

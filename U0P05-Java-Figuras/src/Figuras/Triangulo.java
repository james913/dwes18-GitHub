package Figuras;

import java.util.Scanner;

public class Triangulo {

	Scanner s= new Scanner(System.in);
	private double base;
	private double altura ;
	
	public Triangulo(double base, double altura) {
		this.altura=altura;
		this.base=base;
	}

	public double getBase() {
		return base;
	}

	public void setBase(double base) {
		this.base = base;
	}

	public double getAltura() {
		return altura;
	}

	public void setAltura(double altura) {
		this.altura = altura;
		
	}
	
	public double calcularArea () {
		double area=0;
		area=(base*altura)/2;
	return area;
	}
	public double calcularPerimetro() {
		double perimetro=0,c=0;
		c=Math.sqrt((Math.pow(base, 2))*(Math.pow(altura, 2)));
		perimetro=c+base+altura;
		return perimetro;
	}

	@Override
	public String toString() {
		return "Triangulo [s=" + s + ", base=" + base + ", altura=" + altura + ", getBase()=" + getBase()
				+ ", getAltura()=" + getAltura() + ", calcularArea()=" + calcularArea() + ", calcularPerimetro()="
				+ calcularPerimetro() + "]";
	}
	
	

	
	
	
}

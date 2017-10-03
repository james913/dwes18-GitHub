package Figuras;

import java.util.Scanner;

public class Cuadrado {
	private double lado;
	Scanner s= new Scanner (System.in);
	public Cuadrado (double lado) {
		this.lado=lado;
	}
	
	
	public double getLado() {
		return lado;
	}

	public void setLado(int l) {
		this.lado = l;
	}

	public double Calculararea ( ) {
		double a=0;
		a = lado * lado;
		return a;
	}
	public double Calcularperimetro () {
		double p=0;
		p=Math.pow(lado, 4);
		return p;
	}


	@Override
	public String toString() {
		return "Cuadrado [lado=" + lado + ", s=" + s + ", getLado()=" + getLado() + ", Calculararea()=" + Calculararea()
				+ ", Calcularperimetro()=" + Calcularperimetro() + "]";
	}



	
	
}

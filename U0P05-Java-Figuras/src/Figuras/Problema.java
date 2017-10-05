package Figuras;

public class Problema {

	public static void main(String[] args) {
		
		Circunferencia c1= new Circunferencia(6,"Circulo 1",Color.Amarillo);
		Circunferencia c2= new Circunferencia(1.5,"Circulo 2", Color.Azul);
		Cuadrado cuadrado= new Cuadrado(4.2,"Cuadrado",Color.Morado);
		Triangulo tr= new Triangulo(8, 15,"Triangulo",Color.Verde);
		
		double areaTotal=0,pTotal=0,h=0,
				areaCua1=0,areaC1=0,areaC2=0,areaTrian=0,
				pCua=0,pC1=0,pC2=0,pTr=0;
		
		areaCua1=cuadrado.CalcularArea();
		areaC1=c1.calcularArea();
		areaC2=c2.calcularArea();
		areaTrian=tr.calcularArea();
		areaTotal=areaCua1+(areaC1/2)+(areaC2*(3/4))+areaTrian;
		System.out.println("El área del cuadrado es: "+areaCua1+" Circulo1: "+areaC1+""
				+ " Circulo2: "+areaC2+" Triangulo: "+areaTrian);
		
		System.out.println("El área total de la figura es: "+areaTotal);
		pCua=cuadrado.Calcularperimetro();
		pC1=c1.calcularPerimetro();
		pC2=c2.calcularPerimetro();
		pTr=tr.calcularPerimetro();
		pTotal=pCua+(pC1/2)+(pC2*(3/4))+pTr;
		System.out.println("El perímetro total de la figura es: "+pTotal);
		
		System.out.println(c1.toString());
		System.out.println(c2.toString());
		System.out.println(cuadrado.toString());
		System.out.println(tr.toString());
		
	}

}

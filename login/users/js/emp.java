import java.util.*
class emp
{
	int eid;
	String ename, dept;
	double salary;
	
	void getdata()
	{
			Scanner s=new Scanner(System.in);
			System.out.println("Enter employee id: ");
			eid=s.nextInt();
			System.out.println("Enter employee name: ");
			ename=s.next();
			ename+=s.nextLine();
			System.out.println("Enter department name: ");
			dept=s.next();
			dept+=s.nextLinex();
			System.out.println("Enter employee salary: ");
			salary=sc.nextDouble();
	}
	void printData()
	{
			System.out.println("ID: "+eid);
			System.out.println("Employee Name: "+ename);
			System.out.println("Department Name: "+dept);
			System.out.println("Salary: "+salary);
	}	
}

class empdetail
{
	public static void main(String s[])
	{
		int n,i;
		Scanner s=new Scanner(System.in);
		System.out.println("How many employees? " );
		n=s.nextInt();
		emp[] e=new emp[n];
		
		for(i=0;i<n;i++)
			e[i].getdata();
		
		for(i=0;i<n;i++)
			e[i].printData();	
	}
}
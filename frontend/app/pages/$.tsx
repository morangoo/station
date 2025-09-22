const data = (_: any, status: number) => {
    return new Response(null, { status });
};

export async function loader() {
  return data({}, 404);
}